<?php

namespace ProjxIO\Linkn;

class AbstractLogFactory
{
    /**
     * @param $file
     * @return AssociatedLogger
     */
    public function file($file)
    {
        $formatter = new CompactObjectLogFormatter();
        $serializer = new LineSerializer();
        $consumer = new ForEachLogConsumer(
            new SprintfLogConsumerDecoration(new FileLogConsumer($file), "%s\n")
        );

        return new AssociatedLogger([
            'alert' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'alert      %s'), $serializer, $consumer),
            'critical' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'critical   %s'), $serializer, $consumer),
            'debug' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'debug      %s'), $serializer, $consumer),
            'emergency' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'emergency  %s'), $serializer, $consumer),
            'error' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'error      %s'), $serializer, $consumer),
            'info' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'info       %s'), $serializer, $consumer),
            'notice' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'notice     %s'), $serializer, $consumer),
            'warning' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'warning    %s'), $serializer, $consumer),
        ]);
    }

    public function post($address)
    {
        $formatter = new CompactObjectLogFormatter();
        $serializer = new JsonSerializer();
        $consumer = new ForEachLogConsumer(
            new PostLogConsumer($address, PostLogConsumer::TYPE_JSON)
        );

        return new AssociatedLogger([
            'alert' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'alert      %s'), $serializer, $consumer),
            'critical' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'critical   %s'), $serializer, $consumer),
            'debug' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'debug      %s'), $serializer, $consumer),
            'emergency' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'emergency  %s'), $serializer, $consumer),
            'error' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'error      %s'), $serializer, $consumer),
            'info' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'info       %s'), $serializer, $consumer),
            'notice' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'notice     %s'), $serializer, $consumer),
            'warning' => new Log(new SprintfMessageLogFormatterDecoration($formatter, 'warning    %s'), $serializer, $consumer),
        ]);
    }
}

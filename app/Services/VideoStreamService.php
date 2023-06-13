<?php

namespace App\Services;

class VideoStreamService
{
    private $path = "";
    private $stream = null;
    private $buffer_size = 102400;
    private $chunk_size = 1048576; // 100KB=102400, 1MB=1048576,
    private $start  = -1;
    private $end    = -1;
    private $size   = 0;

    function __construct($filePath)
    {
        $this->path = $filePath;
    }


    private function open()
    {
        if (!($this->stream = fopen($this->path, 'rb'))) {
            die('Could not open stream for reading');
        }
    }


    private function setHeader()
    {
        ob_get_clean();
        header("Content-Type: video/mp4");
        //header("Cache-Control: max-age=2592000, public");
        header("Cache-Control: no-cache");
        //header("Expires: " . gmdate('D, d M Y H:i:s', time() + 2592000) . ' GMT');
        //header("Last-Modified: " . gmdate('D, d M Y H:i:s', @filemtime($this->path)) . ' GMT' );
        $this->start = 0;
        $this->size  = filesize($this->path);
        $this->end   = $this->size - 1;
        header("Accept-Ranges: 0-" . $this->end);

        if (!isset($_SERVER['HTTP_RANGE'])) {
            header("Content-Length: " . $this->size);
            exit;
        }

        $c_start = $this->start;
        $c_end = $this->end;

        list(, $range) = explode('=', $_SERVER['HTTP_RANGE'], 2);

        if (strpos($range, ',') !== false) {
            header('HTTP/1.1 416 Requested Range Not Satisfiable');
            header("Content-Range: bytes $this->start-$this->end/$this->size");
            exit;
        }

        if ($range == '-') {
            $c_start = $this->size - substr($range, 1);
        } else {
            $range = explode('-', $range);
            $range_0 = intval($range[0]);
            $range_1 = (isset($range[1]) && is_numeric($range[1])) ? $range[1] : ($range_0 + $this->chunk_size);

            $c_start = $range_0 ? $range_0 : $c_start;
            $c_end = $range_1 ? $range_1 : $c_end;
        }

        $c_end = ($c_end > $this->end) ? $this->end : $c_end;

        if ($c_start > $c_end || $c_start > $this->size - 1 || $c_end >= $this->size) {
            header('HTTP/1.1 416 Requested Range Not Satisfiable');
            header("Content-Range: bytes $this->start-$this->end/$this->size");
            exit;
        }

        $this->start = $c_start;
        $this->end = $c_end;
        $length = $this->end - $this->start + 1;
        fseek($this->stream, $this->start);
        header('HTTP/1.1 206 Partial Content');
        header("Content-Length: " . $length);
        header("Content-Range: bytes $this->start-$this->end/" . $this->size);
    }



    private function stream()
    {
        $i = $this->start;
        set_time_limit(0);
        while (!feof($this->stream) && $i <= $this->end) {
            $bytesToRead = $this->buffer_size;
            if (($i + $bytesToRead) > $this->end) {
                $bytesToRead = $this->end - $i + 1;
            }
            $data = fread($this->stream, $bytesToRead);
            echo $data;
            flush();
            $i += $bytesToRead;
        }
    }


    private function end()
    {
        fclose($this->stream);
        exit;
    }

    function start()
    {
        $this->open();
        $this->setHeader();
        $this->stream();
        $this->end();
    }
}

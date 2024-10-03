<?php

namespace Salis\OpenBlogFaker\Library;

class TextData
{
    private $text;
    private $first = true;
    private $words = array(
        'mudey',
        'ipsum',
        'dolor',
        'sit',
        'amet',
        'consectetur',
        'adipiscing',
        'elit',
        'a',
        'ac',
        'accumsan',
        'ad',
        'aenean',
        'aliquam',
        'aliquet',
        'ante',
        'aptent',
        'arcu',
        'at',
        'auctor',
        'augue',
        'bibendum',
        'blandit',
        'class',
        'commodo',
        'espero',
        'congue',
        'consequat',
        'conubia',
        'convallis',
        'cras',
        'cubilia',
        'curabitur',
        'curae',
        'cursus',
        'dapibus',
        'diam',
        'dictum',
        'dictumst',
        'dignissim',
        'dis',
        'donec',
        'dui',
        'duis',
        'efficitur',
        'egestas',
        'eget',
        'eleifend',
        'elementum',
        'enim',
        'erat',
        'eros',
        'formation',
        'et',
        'etiam',
        'eu',
        'euismod',
        'ex',
        'facilisi',
        'facilisis',
        'fames',
        'faucibus',
        'felis',
        'fermentum',
        'feugiat',
        'finibus',
        'fringilla',
        'fusce',
        'gravida',
        'habitant',
        'habitasse',
        'hac',
        'hendrerit',
        'himenaeos',
        'iaculis',
        'id',
        'imperdiet',
        'in',
        'inceptos',
        'integer',
        'interdum',
        'justo',
        'lacinia',
        'lacus',
        'laoreet',
        'lectus',
        'leo',
        'libero',
        'ligula',
        'litora',
        'lobortis',
        'luctus',
        'maecenas',
        'magna',
        'magnis',
        'malesuada',
        'massa',
        'mattis',
        'mauris',
        'maximus',
        'metus',
        'mi',
        'molestie',
        'mollis',
        'montes',
        'morbi',
        'mus',
        'nam',
        'nascetur',
        'natoque',
        'nec',
        'neque',
        'netus',
        'nibh',
        'nisi',
        'nisl',
        'non',
        'nostra',
        'nulla',
        'nullam',
        'nunc',
        'odio',
        'orci',
        'ornare',
        'parturient',
        'pellentesque',
        'penatibus',
        'per',
        'pharetra',
        'phasellus',
        'placerat',
        'platea',
        'porta',
        'porttitor',
        'posuere',
        'potenti',
        'praesent',
        'pretium',
        'primis',
        'proin',
        'pulvinar',
        'purus',
        'quam',
        'quis',
        'quisque',
        'rhoncus',
        'ridiculus',
        'risus',
        'rutrum',
        'sagittis',
        'sapien',
        'scelerisque',
        'sed',
        'sem',
        'semper',
        'senectus',
        'sociosqu',
        'sodales',
        'sollicitudin',
        'suscipit',
        'suspendisse',
        'taciti',
        'tellus',
        'tempor',
        'tempus',
        'tincidunt',
        'torquent',
        'tortor',
        'tristique',
        'turpis',
        'ullamcorper',
        'ultrices',
        'ultricies',
        'urna',
        'ut',
        'varius',
        'vehicula',
        'vel',
        'velit',
        'venenatis',
        'vestibulum',
        'vitae',
        'vivamus',
        'viverra',
        'volutpat',
        'vulputate',
    );
    public function __construct($min_sise = 50, $max_size = 500) {}



    // public function update()
    // {
    //     $array = [];
    //     foreach ($this->words as $value) {
    //         $array = [rand(1,)];
    //     }
    //     return strval($this->words(1, $tags));
    // }
    public function word($tags = false)
    {

        return strval($this->words(1, $tags));
    }

    public function wordsArray($count = 1, $tags = false)
    {
        return $this->words($count, $tags, true);
    }
    public function sentence($tags = false)
    {
        return strval($this->sentences(1, $tags));
    }
    public function words($count = 1, $tags = false, $array = false)
    {
        $count      = (int) $count;
        $words      = array();
        $word_count = 0;

        while ($word_count < $count) {
            $shuffle = true;

            while ($shuffle) {
                $this->shuffle();


                if (!$word_count || $words[$word_count - 1] != $this->words[0]) {
                    $words      = array_merge($words, $this->words);
                    $word_count = count($words);
                    $shuffle    = false;
                }
            }
        }

        $words = array_slice($words, 0, $count);

        return $this->output($words, $tags, $array);
    }
    public function sentencesArray($count = 1, $tags = false)
    {
        return $this->sentences($count, $tags, true);
    }
    public function sentences($count = 1, $tags = false, $array = false)
    {
        $sentences = array();

        for ($i = 0; $i < $count; $i++) {
            $sentences[] = $this->wordsArray($this->gauss(24.46, 5.08));
        }

        $this->punctuate($sentences);

        return $this->output($sentences, $tags, $array);
    }
    public function paragraph($tags = false)
    {
        return strval($this->paragraphs(1, $tags));
    }
    public function title($length = 60)
    {
        $startLength  = 0;
        $word = $this->words[rand(0, count($this->words) - 1)];
        $result = strtoupper($word[0]) . \substr($word, 1);
        while (strlen($result) < $length) {
            $word = $this->words[rand(0, count($this->words) - 1)];
            $result .= " " . $word;
        }
        $result .= ".";
        return strval($result);
    }
    public function description($length = 200)
    {
        $startLength  = 0;
        $word = $this->words[rand(0, count($this->words) - 1)];
        $result = strtoupper($word[0]) . \substr($word, 1);
        while (strlen($result) < $length) {
            $word = $this->words[rand(0, count($this->words) - 1)];
            $result .= " " . $word;
        }
        $result .= ".";
        return strval($result);
    }
    public function paragraphsArray($count = 1, $tags = false)
    {
        return $this->paragraphs($count, $tags, true);
    }
    public function paragraphs($count = 1, $tags = false, $array = false)
    {
        $paragraphs = array();

        for ($i = 0; $i < $count; $i++) {
            $paragraphs[] = strval($this->sentences($this->gauss(5.8, 1.93)));
        }

        if ($array) {
            return $this->output($paragraphs, $tags, $array, "\n\n");
        }
        return strval($this->output($paragraphs, $tags, false, "\n\n"));
    }
    private function gauss($mean, $std_dev)
    {
        $x = mt_rand() / mt_getrandmax();
        $y = mt_rand() / mt_getrandmax();
        $z = sqrt(-2 * log($x)) * cos(2 * pi() * $y);

        return intval($z * $std_dev + $mean);
    }
    private function shuffle()
    {
        if ($this->first) {
            $this->first = array_slice($this->words, 0, 8);
            $this->words = array_slice($this->words, 8);

            shuffle($this->words);

            $this->words = $this->first + $this->words;

            $this->first = false;
        } else {
            shuffle($this->words);
        }
    }
    private function punctuate(&$sentences)
    {
        foreach ($sentences as $key => $sentence) {
            $words = count($sentence);
            // Only worry about commas on sentences longer than 4 words
            if ($words > 4) {
                $mean    = log($words, 6);
                $std_dev = $mean / 6;
                $commas  = $this->gauss($mean, $std_dev);

                for ($i = 1; $i <= $commas; $i++) {
                    $word = round($i * $words / ($commas + 1));

                    if ($word < ($words - 1) && $word > 0) {
                        $sentence[$word] .= ',';
                    }
                }
            }

            $sentences[$key] = ucfirst(implode(' ', $sentence) . '.');
        }
    }
    private function output($strings, $tags, $array, $delimiter = ' ')
    {
        if ($tags) {
            if (!is_array($tags)) {
                $tags = array($tags);
            } else {
                $tags = array_reverse($tags);
            }

            foreach ($strings as $key => $string) {
                foreach ($tags as $tag) {
                    if (is_string($tag)) {
                        if ($tag[0] == '<') {
                            $string = str_replace('$1', $string, $tag);
                        } else {
                            $string = sprintf('<%1$s>%2$s</%1$s>', $tag, $string);
                        }
                    }

                    $strings[$key] = $string;
                }
            }
        }

        if (!$array) {
            $strings = implode($delimiter, $strings);
        }

        return $strings;
    }
}

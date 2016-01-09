# DESCRIPTION
A very simple Markov chain text generator, which means that you can feed it a source text (or corpus) and it will generate statistically similar but wholly different gibberish "sentences" composing one or more paragraphs (perhaps to be called a corpse, the result of carefully butchering the input).

## USAGE
Coded in php; upload the files and folders in this repository to your own web server and navigate to the page to use it. NOTE: To make use of the default script option ("International Art English by weirdows worldwide"), you may need to adjust the memory and maximum post size, etc. substantially in your php.ini, because the corpus (source) text it recombobulates is 575KB, at this writing, and could get a lot larger).

## LIVE PAGE
<a href="http://earthbound.io/international-art-english-markov-generator-php/">http://earthbound.io/international-art-english-markov-generator-php/</a>

## DETAILS
This is forked and only slightly tweaked to generate International Art English (IAE, for example, hifalutin and pretentious "Artist Statements--" see https://www.canopycanopycanopy.com/contents/international_art_english), by Richard Alexander Hall, http://earthbound.io -- using a corpus of IAE which I assembled from many sources. I will likely periodically add to the corpus, so that it will produce more realistic output over time.

Original by Hay Kranen: http://www.haykranen.nl/projects/markov

Fork it on Github: http://github.com/hay/markov
Fork my fork: http://github.com/r-alex-hall/markov-php

## LICENSE
<a href="http://www.opensource.org/licenses/mit-license.php">MIT license</a>
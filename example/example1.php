<?php
/**
 * Magnet links library for PHP
 *
 * @link http://stackoverflow.com/questions/6634059/magnet-links-library-for-php
 */

include_once __DIR__ . '/../src/MagnetUri.php';


$magnetUri = (isset($_SERVER['argv'][1])) ? $_SERVER['argv'][1]
    : 'magnet:?xt=urn:sha1:YNCKHTQCWBTRNJIV4WNAE52SJUQCZO5C';

echo 'Magnet URI demo: ', $magnetUri, "\n\n";

$mUri = new MagnetUri($magnetUri);

# Check if the mUri is valid:
echo '     valid: ', $mUri->isValid() ? 'Yes' : 'No', "\n";
# ->valid works as well:
echo '     valid: ', $mUri->valid ? 'Yes' : 'No', "\n\n";

# Access Parts of the URI by their name:
echo 'exactTopic: ', $mUri->exactTopic, "\n";

# Same for the parameter:
echo '        xt: ', $mUri->xt, "\n";

echo "\nString output:\n\n";
echo (string) $mUri;


# PHP Lietuviksi Kreipiniai

## Overview

"PHP Lietuviksi Kreipiniai" is a library designed to convert names into their vocative case. This library is especially useful for applications that want to address users personally.

## Installation

### Via Composer

To install this library, use the Composer package manager. Execute the following command:

\`\`\`bash
composer require hexes/php-lietuviksi-kreipiniai
\`\`\`

## Usage

Here's a simple example showing how to use the `toVocative` function:

\`\`\`php
require 'vendor/autoload.php';

$name = "Jonas";
$newName = toVocative($name);
echo "Hello, $newName!";
\`\`\`

In this example, `toVocative` will convert "Jonas" to "Jonai", and the output will be "Hello, Jonai!"

## Contributing

If you find any issues or have suggestions, please feel free to open an issue or create a pull request.

## License

This library is licensed under the MIT License. See the LICENSE.md file for more details.

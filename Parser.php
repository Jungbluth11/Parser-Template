<?php
declare(strict_types=1);

namespace OCA\Xmlviewer\Parser\[ParserName]; // Replace [ParserName] with the Name of your Parser.

use OCA\Xmlviewer\Parser\XmlParserInterface;

class Parser implements XmlParserInterface {
	public function supportsRoot(string $rootNode): bool {
		return $rootNode === ""; // Replace the empty string with the exact XML root element name supported by this parser.
	}

	public function getTemplatePath(): string {
		return __DIR__ . "/template.php";
	}

	public function parse(\SimpleXMLElement $xml, string $source): ?array {
		// Parse the XML and return the required values as an array for template.php.
		// $source contains the source file; return null if the data is unsupported or unusable.
	}
}

return new Parser();

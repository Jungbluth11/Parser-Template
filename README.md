# [ParserName] for Nextcloud

This parser extends the [Nextcloud XML Viewer](https://github.com/Jungbluth11/XmlViewer) to support **[describe the XML format or data type]**.

## Requirements

- Nextcloud 28 or later
- The [XmlViewer](https://github.com/Jungbluth11/XmlViewer) app installed and enabled
- PHP with the SimpleXML extension (usually already included in the PHP installation used by Nextcloud)

## Installation

1. Install and enable the **XmlViewer** app in Nextcloud.
2. Download the latest release.
3. Copy the `[ParserName]` folder into the XmlViewer app's parser directory:

   ```text
   <nextcloud>/apps/xmlviewer/lib/Parser/[ParserName]/
   ```

   Depending on your installation, the app may instead be located under `custom_apps/xmlviewer` or `extra-apps/xmlviewer`.

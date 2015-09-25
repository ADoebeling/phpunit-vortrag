#!/bin/sh

phpunit

# Eine PHP-Datei, die vor dem ersten Test ausgeführt wird.
# Hier kann eine globale Konfiguration (z. B. Konstanten) hinterlegt werden.
# Auch kann ein Autoloader enthalten sein.
--bootstrap /path/to/file.php

# Schränkt die ausgeführten Tests auf eine Auswahl ein
# Erlaubt reguläre Ausdrücke
--filter "/::testChangeUserName( .*)?$/"

# Definiert wie Dateinamen enden, die Tests enthalten. Test.php ist default.
--test-suffix Test.php

# Globale Variablen ($_GET, ...) werden normalerweise vor jedem Test zurück gesetzt.
--no-globals-backup
# Selbiges für statische Variablen, allerdings werden diese normalerweise nicht zurück gesetzt.
--static-backup

# Per default werden alle Tests ausgeführt, egal wie sie ausgehen.
# Mit den folgenden Optionen stopt das Skript bei entsprechendem Ergebnis.
--stop-on-error
--stop-on-failure
--stop-on-risky # Tests die nichts testen, versehentlich berührter Code
--stop-on-skipped
--stop-on-incomplete

# Etwas mehr Informationen in der Ausgabe
--verbose

# Alle Optionen können in einer XML-Datei vorgenommen werden.
# Dies ist vor allem für Job-Runner wie Jenkins sinnvoll.
--configuration /path/to/phpunit.xml

# Am Ende steht das Verzeichnis in dem nach Tests gesucht werden soll
./Chapter4
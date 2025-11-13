# Zusammenfassung über Grundlagen zur WebEntwicklung


Author: Leonie Rüger
LBS Eibiswald | 3aAPC


## Sicherheitsrisiken von Webanwendungen:

**Phishing**: Fake emais oder websiten bei welcher user denken sollen das es sich um eine echte email/website handelt und das ziel ist es das der User vertrauliche Daten, passwörter, usw angibt. Ein Beispiel davon könnte fake email von der bank mit der meldung das das konto bald geschlossen wird

**Datendiebstahl**: gespeicherte Daten von Usern werden von Angreifern/Hackern gestohlen (z.b Daten wie passwörter, name, adressen, usw)

**SQL Injections**: SQL Befehle welche in z.B Formular eingegeben werden welche dann die Datanbank manipulieren oder sogar die Datenbank oder Daten löschen

**Cross-Site-Scripting**: Schädlicher Javascript code welcher in Webseiten "eingebaut" werden welche dann von anderen Personen ausgeführt werden

**Session-Hijacking**: Laufende Sessions werden übernommen wodurch man sich als ein anderer User ausgeben könnte

**DoS**: Der Server wird mit vielen Anfangen überlastet so das er nicht mehr erreichbar ist, wie z.B. wenn sehr viele ping aufeinmal gesendet werden würden


## Maßnahmen zum Schutz von Webanwendungen:

Verschlüsselung (z.B https), Validierung & Filtern von Eingaben, Updates, Auth (z.B. 2fa)


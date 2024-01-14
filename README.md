# TYPO3 Extension ot_accessiblecontent

The aim of this TYPO3 extension is to make a website more accessible.
For this purpose, database fields, TCA configurations, ViewHelper etc. are added




Hierzu werden in der ersten Version Templates mit Bootstrap5-Klassen eingesetzt.
Für einen späteren Ordner soll dann später einfach von dem
Verzeichnis `Resources/Private/Bootstrap5/` auf einen anderen Ordner
umgeschaltet werden können.

In dem Verzeichnis `.../Bootstrap5/Page/` befinden sich dann noch zusätzliche
Code-Beispiele inkl. fertiger Partials für den Einsatz in dem Seitentemplate.

## ViewHelpers

### subordinateHeading

Mit diesem ViewHelper wird automatisch die Überschrift des Content-Elements
ausgewertet damit ein h-Tag generiert,
welches standardmäßig eine Ebene kleiner ist. (z.B. wird mit header_layout 2 "
h3" zurückgegeben)
Der **defaultHeaderType** wird automatisch ausgewertet, wenn header_layout auf 0
steht.

Sollte header_layout auf 100 (=verborgen) stehen, kann kein gültiges h-Tag
zurückgegeben werden.
Daher wird in diesem Fall ein p-Tag zurückgegeben!

Es ist sinnvoll, eine Variable im FluidTemplate zu definieren, die dann für das
öffnende und schließende Tag verwendet wird.

```html
<f:variable name="subOrdinateHeading"
            value="{ota:subordinateHeading()}"/>
<f:variable name="subSubOrdinateHeading"
            value="{ota:subordinateHeading(additionalLevels: 2)}"/>
<{subOrdinateHeading} class="foobar">
My Sub-Header
</{subOrdinateHeading}>
```

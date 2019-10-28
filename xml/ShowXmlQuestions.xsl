<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/TR/WD-xsl" >
<xs:template match="/">
<html>
    <body>
        <xsl:for-each select="/assessmentItems/assessmentItem">
        Enunciado:
        <xsl:value-of select="itemBody">
        Respuesta correcta:
        <xsl:value-of select="correctResponse">
    </body>
</html>
</xsl:template>
</xsl:stylesheet>

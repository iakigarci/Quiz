<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body>
                <table border = "1">
                    <tr bgcolor = "#9acd32">
                       <th>Autor</th> 
                       <th>Enunciado</th>
                       <th>Correcta</th>
                       <th>Incorrectas</th>
                       <th>Tema</th>
                    </tr>
                    <xsl:for-each select="assessmentItems/assessmentItem">
                        <tr>
                            <td><xsl:value-of select="@author"/></td>
                            <td><xsl:value-of select="itemBody/p"/></td>
                            <td><xsl:value-of select="correctResponse/value"/></td>
                            <xsl:for-each select="incorrectResponses/value">
                                <tr>
                                    <td><xsl:value-of select="."/></td>
                                </tr>
                                </xsl:for-each>
                            <td><xsl:value-of select="@subject"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>

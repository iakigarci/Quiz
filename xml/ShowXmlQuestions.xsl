<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/Transform">
    <xsl:template match="/">
        <html>
            <body>
                <table border="1">
                    <tr>
                        <th>Autor</th>
                        <th>Enunciado</th>
                        <th>Respuesta Correcta</th>
                        <th>Respuestas Incorrectas</th>
                        <th>Tema</th>
                    </tr>
                <xsl:for-each select="/assessmentItems/assessmentItem">
                    <tr>
                        <td><xsl:value-of select="@author"></xsl:value-of></td>
                        <td><xsl:value-of select="itemBody/p"></xsl:value-of></td>
                        <td><xsl:value-of select="correctResponse/value"></xsl:value-of></td>
                        <td>
                                <xsl:for-each select="incorrectResponses/value">
                                    <tr>
                                        <td><xsl:value-of select="."/></td>
                                    </tr>
                                </xsl:for-each>
                        </td>
                        <td><xsl:value-of select="@subject"></xsl:value-of></td>

                    </tr>
                </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
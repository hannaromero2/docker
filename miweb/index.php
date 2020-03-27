</FORM>
<FORM method=post action="cgi-bin/script.pl">
Registro de un usuario
<TABLE BORDER=0>
<TR>
<TD>Apellido</TD>
<TD>
<INPUT type=text name="apellido">
</TD>
</TR>

<TR>
<TD>Nombre</TD>
<TD>
<INPUT type=text name="nombre">
</TD>
</TR>

<TR>
<TD>Género</TD>
<TD>
Hombre:
Mujer: <INPUT type=radio name="género" value="M">
<br>Mujer: <INPUT type=radio name="género" value="F">
</TD>
</TR>

<TR>
<TD>Ocupación</TD>
<TD>
<SELECT name="ocupación">
<OPTION VALUE="profesor">Profesor</OPTION>
<OPTION VALUE="estudiante">Estudiante</OPTION>
<OPTION VALUE="ingeniero">Ingeniero</OPTION>
<OPTION VALUE="jubilado">Jubilado</OPTION>
<OPTION VALUE="otro">Otro</OPTION>
</SELECT>
</TD>
</TR>
<TR>
<TD>Comentarios</TD>
<TD>
<TEXTAREA rows="3" name="comentarios">
Escriba aquí sus comentarios</TEXTAREA>
Enviar
</TD>
</TR>

<TR>
<TD COLSPAN=2>
<INPUT type="submit" value="Enviar">
</TD>
</TR>
</TABLE>
</FORM>

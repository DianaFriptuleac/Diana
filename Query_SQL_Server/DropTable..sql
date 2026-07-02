/*USE GestionaleCorsi;
GO
-- elimina le relazioni tra le tabelle e togli le foreign key
DECLARE @sql NVARCHAR(MAX) = '';

SELECT @sql = @sql + '
ALTER TABLE [' + OBJECT_SCHEMA_NAME(parent_object_id) + '].[' + OBJECT_NAME(parent_object_id) + '] 
DROP CONSTRAINT [' + name + '];'
FROM sys.foreign_keys;

EXEC sp_executesql @sql;
GO*/
-- Poi fai la DROP della tabella da eliminare
<form action="<?= URL ?>lote/modificar" method="Post"> 
    <input type="hidden" name="codigo" value="<? $id ?>">
    <input type="text" name="descripcion" value="<? $datos['Descripcion']; ?>">
    <input type="text" name="cantidad" value="<? $datos['Cantidad']; ?>">
    <input type="text" name="fecha" value="<? $datos['Fecha']; ?>">
    <button type="submit" name="btnMod">Modificar</button>
    
</form>
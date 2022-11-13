# TPE_API

ENDPOINTS:

GET api/productos
Devuelve todos los productos

POST api/productos
Crea un producto nuevo

GET api/productos/:ID (ej api/tarea/123)
Devuelve un producto específico

PUT api/productos/:ID (ej api/tarea/123)
Edita el producto, sustituyendo la información enviada

DELETE api/productos/:ID (ej api/tarea/123)
Elimina un producto específico

api/productos/? id_categoria = 1/2/3/(x = cantidad de categorias que hayan en la db)   ---> Filtra los productos a ser mostrados por su id de categoria
                                    ( 1. Hoodies 2. Con cierre 3. Basicos 4. Sweaters)

api/productos/? orderID = asc/desc   ---> Ordena los productos mostrados por id del producto

api/productos/? page = 1/2/3/x   ---> Pagina y selecciona la pagina actual
                                (Las páginas se dividen de 3 en 3 productos mostrados)
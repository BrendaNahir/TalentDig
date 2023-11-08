import { Router } from 'express';
import { producto } from './controller.js';

export const router = Router()

router.get('/productos', producto.getAll); //traer todos los productos
router.get('/producto/:id_producto', producto.getOne); //llamar solo un producto por id
router.post('/producto', producto.add); //añadir nuevo producto
router.delete('/producto/id_producto', producto.deleteId); //elimina producto por ID
router.delete('/producto/cod_producto', producto.deleteCod); //elimina producto por ISBN
router.put('/producto', producto.update); //actualiza producto por id

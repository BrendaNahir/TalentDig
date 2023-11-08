import mysqlConnection from 'mysql2/promise';

//propiedades de la base
const properties = {
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'castillo_brenda'
};

//exportamos la base (pool)
export const pool = mysqlConnection.createPool(properties);
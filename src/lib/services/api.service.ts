import { fetchApi } from '../api.js';

interface ProductData {
    productName: string;
    productImage: string;
    productPrice: number;
    productQuantity: number;
    productCategory: string;
    productDescription?: string;
}

interface LoginCredentials {
    email: string;
    password: string;
}

export const ApiService = {
    async getProducts(category?: string) {
        const url = category ? 
            `/api/products?category=${encodeURIComponent(category)}` : 
            '/api/products';
        return await fetchApi(url);
    },

    async addProduct(productData: ProductData) {
        return await fetchApi('/api/products/add', {
            method: 'POST',
            body: JSON.stringify(productData),
            encrypt: true
        });
    },

    async login(credentials: LoginCredentials) {
        return await fetchApi('/api/login', {
            method: 'POST',
            body: JSON.stringify(credentials),
            encrypt: true
        });
    }
}; 
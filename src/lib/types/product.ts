export interface Product {
    productID: string;
    productName: string;
    productImage: string;
    productPrice: number;
    productQuantity: number;
    productCategory: string;
    productDescription?: string;
    productStatus: 'active' | 'inactive';
    productSold: number;
    productSince: string;
} 
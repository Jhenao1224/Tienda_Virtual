import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-crud',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './crud.component.html',
  styleUrl: './crud.component.css'
})
export class CrudComponent {
  products: any[] = []; // Lista para almacenar los productos

  // Función para agregar un producto
  addProduct(product: any) {
    // Agrega el nuevo producto a la lista de productos
    this.products.push({
      name: product.name,
      description: product.description,
      price: product.price,
      quantity: product.quantity,
      expiryDate: product.expiryDate
    });
  
    // Resetea el formulario después de agregar el producto
    const form = document.getElementById('myForm') as HTMLFormElement | null;
    if (form) {
      form.reset();
    }
  }
  

}

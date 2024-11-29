<?php
namespace App\Controllers;

class Products extends BaseController {

    public function index() {
        // Load the model
        $productsmodel = model('Products_model');

        // Retrieve the data from the table
        $data['products'] = $productsmodel->get()->getResult();

        $data['title'] = "List of Products";

        return view('include\header', $data)
            .view('include\navbar')
            .view('products_view', $data)
            .view('include\footer');
    }

    public function add() {
        if($this->request->is('POST')) {
            // Load model
            $productsmodel = model('Products_model');

            // Retrieve data from form
            $registerdata = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'Reservationdate',
            ]);

            // Insert data to the table
            $productsmodel->insert($registerdata);

            // Redirect to the products list page
            return redirect()->to('products');
        }

        $data['title'] = "Register New Product";

        return view('include\header', $data)
            .view('include\navbar')
            .view('addproducts_view')
            .view('include\footer');
    }

    public function view($id = 0) {
        // Load the model
        $productsmodel = model('Products_model');

        // Retrieve the data from the table
        $data['products'] = $productsmodel->where('id', $id)->first();

        $data['title'] = "View Product";

        return view('include\header', $data)
            .view('include\navbar')
            .view('product_view', $data)
            .view('include\footer');
    }

    public function edit($id = 0) {
        $productsmodel = model('Products_model');

        if($this->request->is('POST')) {
            // Retrieve data from form
            $updatedata = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'Reservationdate',
            ]);

            // Update data in the table
            $productsmodel->update($id, $updatedata);

            // Redirect to the products list page
            return redirect()->to('products');
        }

        // Retrieve the data from the table
        $data['products'] = $productsmodel->where('id', $id)->first();
        $data['title'] = "Edit Product Details";

        return view('include\header', $data)
            .view('include\navbar')
            .view('editproducts_view', $data)
            .view('include\footer');
    }

    public function delete($id = 0) {
        $productsmodel = model('Products_model');
        // Delete the product based on ID
        $productsmodel->delete($id);

        // Redirect to the products list page
        return redirect()->to('products');
    }

    public function deactivate($id = 0) {
        // Load the model
        $productsmodel = model('Products_model');

        // Update the product's status to "deactivated"
        $productsmodel->update($id, ['status' => 'deactivated']);

        // Redirect back to the products list
        return redirect()->to('products');
    }
}
?>

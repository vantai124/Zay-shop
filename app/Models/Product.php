<?php

namespace App\Models;
use App\Models\Item;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        ];
    // use HasFactory;
    public function getId() {
        return $this
        ->attributes['id'];
        }
        public function setId($id) {
        $this
        ->attributes['id'] = $id;
        }
        public function getName() {
        return $this
        ->attributes['name'];
        }
        public function setName($name) {
        $this
        ->attributes['name'] = $name;
        }
        public function getDescription() {
        return $this
        ->attributes['description'];
        }
        public function setDescription($description) {
        $this
        ->attributes['description'] = $description;
        }
        public function getImage() {
        return $this
        ->attributes['image'];
        }
        public function setImage($image) {
        $this
        ->attributes['image'] = $image;
        }
        public function getPrice() {
            return $this
            ->attributes['price'];
            }
            public function setPrice($price) {
            $this
            ->attributes['price'] = $price;
            }
            public function getCreatedAt() {
            return $this
            ->attributes['created_at'];
            }
            public function setCreatedAt($createdAt) {
            $this
            ->attributes['created_at'] = $createdAt;
            }
            public function getUpdatedAt() {
            return $this
            ->attributes['updated_at'];
            }
            public function setUpdatedAt($updatedAt) {
            $this
            ->attributes['updated_at'] = $updatedAt;
            }
            public static function sumPricesByQuantities($products, $productsInSession)
            {
                $total = 0;
                foreach ($products as $product) {
                $total = $total + ($product->getPrice()*$productsInSession[$product->getId()]);
                }
                return $total;
            }
}

<?php
namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    /**
     * Get hot products by rating
     */
    public function getHotProduct($number);

    public function getBestSellerProduct($number);
}

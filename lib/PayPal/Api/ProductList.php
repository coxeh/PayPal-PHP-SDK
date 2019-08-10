<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class ProductList
 *
 * Resource representing a list of products with basic information and get link.
 *
 * @package PayPal\Api
 *
 * @property \PayPal\Api\Product[] products
 * @property string total_items
 * @property string total_pages
 * @property \PayPal\Api\Links[] links
 */
class ProductList extends PayPalModel
{
    /**
     * Array of products.
     *
     * @param \PayPal\Api\Product[] $products
     * 
     * @return $this
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }

    /**
     * Array of products.
     *
     * @return \PayPal\Api\Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Append Products to the list.
     *
     * @param \PayPal\Api\Product $product
     * @return $this
     */
    public function allProduct($product)
    {
        if (!$this->getProducts()) {
            return $this->setProducts(array($product));
        } else {
            return $this->setProducts(
                array_merge($this->getProducts(), array($product))
            );
        }
    }

    /**
     * Remove Product from the list.
     *
     * @param \PayPal\Api\Product $product
     * @return $this
     */
    public function removeProduct($product)
    {
        return $this->setProducts(
            array_diff($this->getProducts(), array($product))
        );
    }

    /**
     * Total number of items.
     *
     * @param string $total_items
     * 
     * @return $this
     */
    public function setTotalItems($total_items)
    {
        $this->total_items = $total_items;
        return $this;
    }

    /**
     * Total number of items.
     *
     * @return string
     */
    public function getTotalItems()
    {
        return $this->total_items;
    }

    /**
     * Total number of pages.
     *
     * @param string $total_pages
     * 
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->total_pages = $total_pages;
        return $this;
    }

    /**
     * Total number of pages.
     *
     * @return string
     */
    public function getTotalPages()
    {
        return $this->total_pages;
    }

    /**
     * Sets Links
     *
     * @param \PayPal\Api\Links[] $links
     * 
     * @return $this
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets Links
     *
     * @return \PayPal\Api\Links[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Append Links to the list.
     *
     * @param \PayPal\Api\Links $links
     * @return $this
     */
    public function addLink($links)
    {
        if (!$this->getLinks()) {
            return $this->setLinks(array($links));
        } else {
            return $this->setLinks(
                array_merge($this->getLinks(), array($links))
            );
        }
    }

    /**
     * Remove Links from the list.
     *
     * @param \PayPal\Api\Links $links
     * @return $this
     */
    public function removeLink($links)
    {
        return $this->setLinks(
            array_diff($this->getLinks(), array($links))
        );
    }

}

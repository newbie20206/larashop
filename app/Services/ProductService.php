<?php
namespace App\Services;

use App\Models\Product;
use App\SearchBuilders\ProductSearchBuilder;

class ProductService
{
    /**使用elasticsearch获取推荐相似商品
     * @param Product $product
     * @param $amount
     * @return array
     * Author: sai
     * DateTime: 2020/2/2 11:31 下午
     */
    public function getSimilarProductIds(Product $product, $amount)
    {
        // 如果商品没有商品属性，则直接返回空
        if (count($product->properties) === 0) {
            return [];
        }
        $builder = (new ProductSearchBuilder())->onSale()->paginate($amount, 1);
        foreach ($product->properties as $property) {
            $builder->propertyFilter($property->name, $property->value, 'should');
        }
        $builder->minShouldMatch(ceil(count($product->properties) / 2));
        $params = $builder->getParams();
        $params['body']['query']['bool']['must_not'] = [['term' => ['_id' => $product->id]]];

        $result = app('es')->search($params);

        return collect($result['hits']['hits'])->pluck('_id')->all();
    }
}

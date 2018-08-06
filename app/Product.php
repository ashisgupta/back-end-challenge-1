<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Elasticquent\ElasticquentTrait;

class Product extends Model
{
    use SoftDeletes;
    // use ElasticquentTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image', 'available_sizes', 'price', 'category'];

    /**
     * Mapping configuration for ElasticSearch.
     *
     * @var array
     */
    // protected $mappingProperties = array('name' => array('type' => 'text','analyzer' => 'standard'),'category' => array('type' => 'text','analyzer' => 'standard'));


    /**
     * The elasticsearch settings.
     *
     * @var array
     */
    // protected $indexSettings = [
    //     'analysis' => [
    //         'char_filter' => [
    //             'replace' => [
    //                 'type' => 'mapping',
    //                 'mappings' => [
    //                     '&=> and '
    //                 ],
    //             ],
    //         ],
    //         'filter' => [
    //             'word_delimiter' => [
    //                 'type' => 'word_delimiter',
    //                 'split_on_numerics' => false,
    //                 'split_on_case_change' => true,
    //                 'generate_word_parts' => true,
    //                 'generate_number_parts' => true,
    //                 'catenate_all' => true,
    //                 'preserve_original' => true,
    //                 'catenate_numbers' => true,
    //             ]
    //         ],
    //         'analyzer' => [
    //             'default' => [
    //                 'type' => 'custom',
    //                 'char_filter' => [
    //                     'html_strip',
    //                     'replace',
    //                 ],
    //                 'tokenizer' => 'whitespace',
    //                 'filter' => [
    //                     'lowercase',
    //                     'word_delimiter',
    //                 ],
    //             ],
    //         ],
    //     ],
    //     'index'=> [
    //         "max_result_window" => 500000
    //     ],
    // ];

    
}

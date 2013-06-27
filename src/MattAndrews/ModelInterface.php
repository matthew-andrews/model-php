<?php
namespace MattAndrews;

/**
 * Model Interface
 *
 * Implement this and your model will be
 * compatible with mine...
 *
 * @copyright The Financial Times Limited [All Rights Reserved]
 * @author Matt Andrews <matt@mattandre.ws>
 */

interface ModelInterface {

  /**
   * Can be constructed with initial data.
   *
   * @param [type] $data [description]
   */
  public function __construct($data);

  /**
   * Converts the model to an array that
   * so that the data can be json_encode'd.
   *
   * @return [Array] [Returns an object that can be json_encode'd.  Does not return JSON]
   */
  public function toJSON();

}

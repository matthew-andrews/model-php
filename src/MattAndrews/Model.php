<?php
namespace MattAndrews;

/**
 * Simple Model object
 *
 * Based on @wilsonpage's Javascript Model.
 *
 * @copyright The Financial Times Limited [All Rights Reserved]
 * @author Matt Andrews <matt@mattandre.ws>
 */

class Model implements ModelInterface {
  private $_data;

  /**
   * Model Constructor
   *
   * @param [Array] $data
   */
  public function __construct($data = array()) {
    $this->_data = $data;
  }

  /**
   * Gets a value by key
   *
   * If no key is given, the
   * whole model is returned.
   * @param  [String] $key key
   * @return [*]
   * @public
   */
  public function get($key = null) {
    return $key
      ? (isset($this->_data[$key]) ? $this->_data[$key] : null)
      : $this->_data;
  }

  /**
   * Sets data on the model.
   *
   * Accepts either a key and
   * value, or an associative
   * array.
   *
   * @param [String|Array] $data
   * @param [*|undefined] $value
   * @return [Model] returns the instance for chaining
   */
  public function set($data, $value = null) {

    // If a string key is passed
    // with a value. Set the value
    // on the key in the data store.
    if (is_string($data) and !is_null($value)) {
      $this->_data[$data] = $value;
    }

    // Merge the object into the data store
    if (is_array($data)) {
      array_merge($this->_data, $data);
    }

    // Allow chaining
    return $this;
  }


  /**
   * Clears the data store.
   *
   * @return [Model] returns the instance for chaining
   */
  public function clear() {
    $this->_data = array();

    // Allow chaining
    return $this;
  }

  /**
   * Deletes the data store.
   *
   * @return void
   */
  public function destroy() {
    $this->clear();
  }

  /**
   * Returns a shallow
   * clone of the data store.
   *
   * (This is the default
   * behaviour in PHP)
   *
   * @return [Array]
   */
  public function toJSON() {
    return $this->_data;
  }

}

<?php

class ModelTest extends \PHPUnit_Framework_TestCase {

    private $_sampleData = array(
        'foo' => 'oof',
        'bar' => 'rab',
        'baz' => 'zab'
    );

    public function test_stores_the_array_passed_into_the_constructor() {
        $model = new \MattAndrews\Model($this->_sampleData);

        $this->assertEquals('oof', $model->get('foo'));
        $this->assertEquals('rab', $model->get('bar'));
        $this->assertEquals('zab', $model->get('baz'));
    }

    public function test_can_be_constructed_with_no_data() {
        $threwException = false;
        try {
            $model = new \MattAndrews\Model();
        } catch (Exception $exception) {
            $threwException = true;
        }
        $this->assertFalse($threwException);
    }

    public function test_can_overwrite_specific_key() {
        $model = new \MattAndrews\Model($this->_sampleData);
        $model->set('foo', 'foobar');

        $this->assertEquals('foobar', $model->get('foo'));
        $this->assertEquals('rab', $model->get('bar'));
        $this->assertEquals('zab', $model->get('baz'));
    }

    public function test_can_get_all_the_data() {
        $model = new \MattAndrews\Model($this->_sampleData);
        $this->assertEquals($this->_sampleData, $model->get());
    }

    public function test_set_and_clear_chain() {
        $model = new \MattAndrews\Model();
        $model->set('apples', 'pears')->clear()->set('123', '456');
        $this->assertEquals(array('123' => '456'), $model->get());
    }

    public function test_set_accepts_arrays() {
        $model = new \MattAndrews\Model();
        $model->set(array(
            'test' => 1,
            'test2' => 2
        ));
        $this->assertEquals(1, $model->get('test'));
        $this->assertEquals(2, $model->get('test2'));
        $model->set(array(
            'test2' => 3,
            'cats' => 'dogs'
        ));
        $this->assertEquals(3, $model->get('test2'));
        $this->assertEquals('dogs', $model->get('cats'));
    }

    public function test_destroy_clears() {
        $model = new \MattAndrews\Model();
        $model->set(array(
            'test' => 'blah'
        ));

        $model->destroy();
        $this->assertEquals(null, $model->get('test'));
    }

}

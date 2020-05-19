<?php




class Task {
    protected $description;
    protected $completed = false;
    public function __construct($description)
    {
        //automaticaly triggered
        $this->description = $description;
    }

    public function complete()
    {
        return $this->completed = true;
    }

    /**
     * @return bool
     */
    public function isComplete()
    {
        return $this->completed;
    }



}
$tasks=[
    new Task('wash dishes'),
    new Task('wash floor'),
    new Task('study programming'),
];

$tasks[0]->complete();

require 'index.view.php';
<?php

use Intervention\Image\ImageManagerStatic as Image;

class Vraag extends Model
{
    protected $table = 'formulier';

    /**
     * @Type int(11)
     */
    protected $id;

    /**
     * @Type varchar(255)
     */
    protected $vraag;

    public function getId()
    {
      return $this->id;
    }

    public function getVraag()
    {
      return $this->vraag;
    }

    public function __construct()
    {
    }

    protected static function newModel($obj)
    {
        return true;
    }

    public static function registerr($form)
    {
      // dd($form['vraag']);
        $vraag = new Vraag();
        $vraag->vraag = $form['vraag'];

        $vraag->save();

    }

    public static function registerrForm()
    {
        $form = new Form();

        $form->addField((new FormField("vraag"))
            ->required());

        return $form->getHTML();
    }
      //  $form->addField((new FormField("example"))
      //      ->type('select')
      //      ->placeholder("Example select")
      //      ->value('example2')
      //      ->values([
      //          'example1' => 'Example 1',
      //          'example2' => 'Example 2',
      //          'example3' => 'Example 3',
      //      ]));
      public static function updateVraag($form)
      {
          $vraag = Vraag::findById($form['id']);
          $vraag->vraag = $form['vraag'];

          $vraag->save();
      }

      public static function editVraagForm($vraag)
      {
          $vraag = Vraag::findById($vraag->id);

          $form = new Form();

          $form->addField((new FormField("id"))
              ->type("hidden")
              ->value($vraag->id)
              ->required());

          $form->addField((new FormField("vraag"))
              ->placeholder("Vraag")
              ->value($vraag->vraag)
              ->required());

          return $form->getHTML();
      }
}

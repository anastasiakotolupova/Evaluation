<?php


class Cat
{
    /**
     * Name
     *
     * Store the current object name value
     *
     * @var string
     */
    private $name;
    
    /**
     * Age
     *
     * Store the current object age value
     *
     * @var int
     */
    private $age;
    
    /**
     * Race
     *
     * Store the current object race value
     *
     * @var string
     */
    private $race;
    
    /**
     * Color
     *
     * Store the current object color value
     *
     * @var string
     */
    private $color;
    
    /**
     * Gender
     * 
     * Store the current object gender value
     * 
     * @var $gender
     */
    private $gender;
    
    private static $allowedGender = ['male', 'female'];
    
    /**
     * Get name
     * 
     * Return the name of the current cat instance
     * 
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Get age
     * 
     * Return the age of the current cat instance
     * 
     * @return int
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Get gender
     * 
     * Return the gender of the current cat instance
     * 
     * @return string
     */
    public function getGender() : string
    {
        return $this->gender;
    }

    /**
     * Get color
     * 
     * Return the color of the current cat instance
     * 
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * Get race
     * 
     * Return the race of the current cat instance
     * 
     * @return string
     */
    public function getRace() : string
    {
        return $this->race;
    }

    /**
     * Set name
     * 
     * Set the current cat instance name value
     * 
     * @param string $name The new name
     * 
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * Set age
     *
     * Set the current cat instance age value
     *
     * @param int $age The new age
     *
     * @return $this
     */
    public function setAge(int $age)
    {
        $this->age = $age;
        return $this;
    }
    
    /**
     * Set gender
     *
     * Set the current cat instance gender value. The gender value will be inserted
     * only if it's 'male' or 'female'
     *
     * @param string $gender The new gender
     *
     * @return $this
     * 
     * @throws Exception
     */

    public function setGender($gender)
    {
        $gender = strtolower( trim($gender));
        $gender_autorised = ['male', 'female'];
        if( in_array($gender, $gender_autorised)){
            $this->gender = $gender;
        } else {
            throw new Exception( 'Gender must be \'male\' or \'female\'.' );
        }

        return $this;
    }

    /**
     * Set color
     * 
     * Set the current cat instance color value
     * 
     * @param string $color The new color
     * 
     * @return $this
     * 
     * @throws Exception
     */
    public function setColor($color)
    {
        $couleur = trim($color);

        if( strlen($color) <= 10 && strlen($color) >= 3 ){
            $this->color = $color;
        } else {
            throw new Exception( 'Color must contain 3 to 10 characters' );
        }

        return $this;
    }
    
    /**
     * Set race
     * 
     * Set the current cat instance race value
     * 
     * @param string $race The new race
     * 
     * @return $this
     * 
     * @throws Exception
     */
    public function setRace($race)
    {
        $race = trim($race);

        if( strlen($race) <= 20 && strlen($race) >= 3 ){
            $this->race = $race;
        } else {
            throw new Exception( 'Race must contain 3 to 20 characters' );
        }

        return $this;
    }
    
    /**
     * @return array
     */
    public function getInfos()
    {
        return [
            'name' => $this->getName(),
            'age' => $this->getAge(),
            'color' => $this->getColor(),
            'gender' => $this->getGender(),
            'race' => $this->getRace(),
        ];
    }

}


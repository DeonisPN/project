<?php

namespace Denis\Pro\Blog;
class User{



    public function __construct(
        private int $id,
        private string $name,
        private string $lastname,

    )
    {

    }
    public function __toString():string
    {
        return $this->getName() . '' . $this->getLastname();
    }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of lastname
         */ 
        public function getLastname()
        {
                return $this->lastname;
        }

        /**
         * Set the value of lastname
         *
         * @return  self
         */ 
        public function setLastname($lastname)
        {
                $this->lastname = $lastname;

                return $this;
        }
}
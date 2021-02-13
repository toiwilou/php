<?php

    class Eleve {

        private string $nom, $prenom, $email, $telephone, $classe;

        public function __construct(string $nom, string $prenom, string $email, string $telephone, string $classe) {
            
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->telephone = $prenom;
            $this->classe = $classe;
        }

        public function getNom(): ?string
        {
            return $this->nom;
        }

        public function setNom(string $nom): self
        {
            $this->nom = $nom;

            return $this;
        }

        public function getPrenom(): ?string
        {
            return $this->prenom;
        }

        public function setPrenom(string $prenom): self
        {
            $this->prenom = $prenom;

            return $this;
        }

        public function getEmail(): ?string
        {
            return $this->email;
        }

        public function setEmail(string $email): self
        {
            $this->email = $email;

            return $this;
        }

        public function getTelephone(): ?string
        {
            return $this->telephone;
        }

        public function setTelephone(string $telephone): self
        {
            $this->telephone = $telephone;

            return $this;
        }

        public function getClasse(): ?string
        {
            return $this->classe;
        }

        public function setClasse(string $classe): self
        {
            $this->classe = $classe;

            return $this;
        }
    }
?>
<?php

namespace Samane\Proxies\__CG__;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \Client implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Client' . "\0" . 'id', '' . "\0" . 'Client' . "\0" . 'matricule', '' . "\0" . 'Client' . "\0" . 'cni', '' . "\0" . 'Client' . "\0" . 'nom', '' . "\0" . 'Client' . "\0" . 'prenom', '' . "\0" . 'Client' . "\0" . 'sexe', '' . "\0" . 'Client' . "\0" . 'dateNaiss', '' . "\0" . 'Client' . "\0" . 'telephone', '' . "\0" . 'Client' . "\0" . 'adresse', '' . "\0" . 'Client' . "\0" . 'email', '' . "\0" . 'Client' . "\0" . 'salaire', '' . "\0" . 'Client' . "\0" . 'login', '' . "\0" . 'Client' . "\0" . 'password', '' . "\0" . 'Client' . "\0" . 'comptes', '' . "\0" . 'Client' . "\0" . 'entreprise'];
        }

        return ['__isInitialized__', '' . "\0" . 'Client' . "\0" . 'id', '' . "\0" . 'Client' . "\0" . 'matricule', '' . "\0" . 'Client' . "\0" . 'cni', '' . "\0" . 'Client' . "\0" . 'nom', '' . "\0" . 'Client' . "\0" . 'prenom', '' . "\0" . 'Client' . "\0" . 'sexe', '' . "\0" . 'Client' . "\0" . 'dateNaiss', '' . "\0" . 'Client' . "\0" . 'telephone', '' . "\0" . 'Client' . "\0" . 'adresse', '' . "\0" . 'Client' . "\0" . 'email', '' . "\0" . 'Client' . "\0" . 'salaire', '' . "\0" . 'Client' . "\0" . 'login', '' . "\0" . 'Client' . "\0" . 'password', '' . "\0" . 'Client' . "\0" . 'comptes', '' . "\0" . 'Client' . "\0" . 'entreprise'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getID', []);

        return parent::getID();
    }

    /**
     * {@inheritDoc}
     */
    public function getCni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCni', []);

        return parent::getCni();
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricule', []);

        return parent::getMatricule();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaiss()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaiss', []);

        return parent::getDateNaiss();
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalaire', []);

        return parent::getSalaire();
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', []);

        return parent::getLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getCompte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompte', []);

        return parent::getCompte();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntreprise', []);

        return parent::getEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setID($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setID', [$id]);

        return parent::setID($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setCni($cni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCni', [$cni]);

        return parent::setCni($cni);
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricule($mat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', [$mat]);

        return parent::setMatricule($mat);
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaiss($dateNaiss)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaiss', [$dateNaiss]);

        return parent::setDateNaiss($dateNaiss);
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setSalaire($salaire = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalaire', [$salaire]);

        return parent::setSalaire($salaire);
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin($login = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', [$login]);

        return parent::setLogin($login);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setEntreprise($entreprise = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntreprise', [$entreprise]);

        return parent::setEntreprise($entreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function setCompte($comptes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompte', [$comptes]);

        return parent::setCompte($comptes);
    }

}

<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $estado ;
    public $idempleado;
    public $password;
    public $authKey;
    public $accessToken;

/**    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    { $persona= Login::find()->where('Uesrnid=:Uesrnid',[':Uesrnid'=>$id])->one();
        $user= new User();
        $user->id=$persona->Uesrnid;
        $user->username=$persona->Uesrnid;
        $user->password=$persona->password;
        $user->estado=$persona->estado;
        $user->authKey=$persona->authkey;
        $user->accessToken=$persona->accestoken;
        $user-> idempleado=$persona->idempleado;
        return $user;
   //     return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $persona=Login::find()->where('accesstoken=:tk',[':tk'=>$token]);
        if($persona->count()==1){
            $user=new User();
            $user->id=$persona->Uesrnid;
            $user->username=$persona->Uesrnid;
            $user->password=$persona->password;
            $user->estado=$persona->estado;
            $user->authKey=$persona->authkey;
            $user->accessToken=$persona->accestoken;
            $user-> idempleado=$persona->idempleado;
            return $user;

        }else{
            return null;
        }

        /**foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }*/
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $persona=Login::find()->where('uesrnid=:tk',[':tk'=>$username])->one();
        if($persona){
            $user=new User();
            $user->id=$persona->Uesrnid;
            $user->username=$persona->Uesrnid;
            $user->password=$persona->password;
            $user->estado=$persona->estado;
            $user->authKey=$persona->authkey;
            $user->accessToken=$persona->accestoken;
            $user-> idempleado=$persona->idempleado;
            return $user;
        }else{
           return null;
        }
        /**foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }*/
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return strcasecmp($authKey,$this->authKey)==0;
        //return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}

<?php

include_once('../core/models/BaseModel.php');


class SessionModel extends BaseModel
{
    public function saveSession($sessionId, $data)
    {
        $session['id'] = $data['id'];
        $session["sessionId"] = $sessionId;
        // die(var_dump($data));

        $this->query->insertInto('sessions', $session);
        // die(var_dump($this->query));

        $this->db->execstmt($this->query, $session);
    }

    public function getSession($sessionId)
    {
        // $this->selectAll('sessions')->where('sessionId', $sessionId);
        $userdata = ['users.id','users.email','users.username','name','about','location'];
        $this->query->select($userdata)->from('users')->join('sessions')->on('users.id', 'sessions.id')->where('sessionId', $sessionId);
        //die(var_dump($this->query));
        //die(var_dump( $this->execstmt($this->query, [])->fetch()));
        return $this->db->execstmt($this->query, [])->fetch();
    }

    public function deleteSession($sessionId)
    {
        $this->query->deleteFrom('sessions')->where('sessionId', $sessionId);
        return $this->db->execstmt($this->query, []);
    }
}
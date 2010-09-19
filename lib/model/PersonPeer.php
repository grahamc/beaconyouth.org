<?php
class PersonPeer {
    public static function retrieveAll() {
        $r = array();
        $r[] = new Person('Adult Co-Chair', 'Chris Bonner', 'bonnercc@aol.com');
        $r[] = new Person('Youth Co-Chair', 'Carrel Morgan', 'c.n.m.fall@gmail.com');
        $r[] = new Person('Outreach Chair', 'Abi Kirby', 'cellochica101@embarqmail.com');
        
        return $r;
    }
}
<?php 

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    public function fullName()
    {
        return $this->first . ' ' . $this->last;
    }

    public function accountAge()
    {
        return $this->created_at->diffForHumans();
    }

}
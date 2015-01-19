<?php
use \Stock\Repository\UserRepository;
/**
 * ShopsController Class
 *
 * Implements base actions for user shops management
 */
class ShopsController extends BaseController
{
    
    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.default';
    
    public function __construct(UserRepository $repo)
    {
        parent::__construct();  
        $this->repo = $repo;
    }

    /**
     * Displays add new shop form
     *
     * @return  Illuminate\Http\Response
     */
    public function create()
    {
        $this->layout->content = View::make('shops.create');
    }

    /**
     * Displays list of user shops
     *
     * @return  Illuminate\Http\Response
     */
    public function listAction()
    {
        $this->layout->content = View::make(Config::get('confide::signup_form'));
    }
}

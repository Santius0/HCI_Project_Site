<?php

namespace App\Http\Controllers\Proposal;

use App\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProposalController extends Controller
{
    public function index()
    {
        return view('proposal.overview');
    }


}

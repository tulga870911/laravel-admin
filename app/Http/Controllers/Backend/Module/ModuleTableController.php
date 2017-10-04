<?php

namespace App\Http\Controllers\Backend\Module;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Module\ModuleRepository;
use App\Http\Requests\Backend\Modules\ManageModuleRequest;

class ModuleTableController extends Controller
{
    /**
     * @var ModuleRepository
     */
    protected $module;

    /**
     * @param ModuleRepository $module
     */
    public function __construct(ModuleRepository $module)
    {
        $this->module = $module;
    }

    /**
     * @param ManageModuleRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageModuleRequest $request)
    {
        return Datatables::of($this->module->getForDataTable())
            ->escapeColumns(['name', 'url', 'view_permission_id'])
            ->addColumn('created_by', function ($module) {
                return $module->created_by;
            })
            ->make(true);
    }
}

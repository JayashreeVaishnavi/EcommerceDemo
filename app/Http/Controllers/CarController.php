<?php

namespace App\Http\Controllers;

use App\Model\CarCompany;
use App\Model\CarModel;
use App\Model\Year;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CarController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getYears()
    {
        try {
            $years = Year::select('id', 'years as text')
                ->when(request('search'), function ($years) {
                    return $years->where('years', 'like', '%' . request('search') . '%');
                })->paginate(10);
            return response()->json($years);
        } catch (\Throwable $exception) {
            logError($exception, 'Error while listing years', 'CarController@getYears');
            return response()->json([]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCompanies(Request $request)
    {
        try {
            $companies = CarCompany::select('id', 'name as text')->when($request->year_id, function ($companies) use ($request) {
                return $companies->where('year_id', $request->year_id);
            })->paginate(10);
            return response()->json($companies);
        } catch (\Throwable $exception) {
            logError($exception, 'Error while listing companies', 'CarController@getCompanies');
            return response()->json([]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCars(Request $request)
    {
        try {
            $cars = CarModel::select('id', 'name as text')->when($request->year_id, function ($cars) use ($request) {
                return $cars->where('year_id', $request->year_id);
            })->when($request->company_id, function ($cars) use ($request) {
                return $cars->where('car_company_id', $request->company_id);
            })->paginate(10);
            return response()->json($cars);
        } catch (\Throwable $exception) {
            logError($exception, 'Error while listing companies', 'CarController@getCompanies');
            return response()->json([]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $cars = CarModel::with(['company', 'year'])->when($request->year_id, function ($cars) use ($request) {
                    return $cars->where('year_id', $request->year_id);
                })->when($request->company_id, function ($cars) use ($request) {
                    return $cars->where('car_company_id', $request->company_id);
                })->when($request->search_value, function ($model) use ($request) {
                    return $model->where('name', 'like', '%' . $request->search_value . '%');
                });
                return Datatables::of($cars)
                    ->addColumn('year', function ($car) {
                        return $car->year->years ?? '-';
                    })
                    ->addColumn('company', function ($car) {
                        return $car->company->name ?? '-';
                    })
                    ->editColumn('name', function ($car) {
                        return $car->name ?? '-';
                    })->editColumn('price', function ($car) {
                        return $car->price ?? 0.00;
                    })
                    ->make(true);
            }
            return view('index');
        } catch (\Throwable $exception) {
            logError($exception, 'Error while listing companies', 'CarController@getCompanies');
            return Datatables::of(collect([]))
                ->make(true);
        }
    }

    /**
     * @param CarModel $model
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(CarModel $model)
    {
        return view('show', compact('model'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCarView(Request $request)
    {
        try {
            $carModels = CarModel::with(['company', 'year'])->when($request->year_id, function ($cars) use ($request) {
                return $cars->where('year_id', $request->year_id);
            })->when($request->company_id, function ($cars) use ($request) {
                return $cars->where('car_company_id', $request->company_id);
            })->when($request->model_id, function ($model) use ($request) {
                return $model->where('id', $request->model_id);
            })->when($request->search_value, function ($model) use ($request) {
                return $model->where('name', 'like', '%' . $request->search_value . '%');
            })->limit(3)->get();
            $view = view('card-decks', compact('carModels'))->render();
        } catch (\Throwable $exception) {
            $carModels = CarModel::with(['company', 'year'])->limit(3)->get();
            $view = view('card-decks', compact('carModels'))->render();
        }
        return response()->json($view);
    }
}

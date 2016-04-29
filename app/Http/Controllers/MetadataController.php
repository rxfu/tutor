<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveGenderRequest;
use Tis\Tutor\Services\MetadataFactory;

class MetadataController extends Controller {

	protected $factory;

	public function __construct(MetadataFactory $factory) {
		$this->factory = $factory;
	}

	public function getList($type) {
		$repository = $this->factory->build($type);
		$attributes = $repository->getAttributes();
		$items      = $repository->getAll();
		$title      = trans('database.' . $repository->getTable());

		return view('meta.list', compact('title', 'type', 'attributes', 'items'));
	}

	public function show($type, $id) {
		$repository = $this->factory->build($type);
		$item       = $repository->get($id);
		$attributes = $repository->getAttributes();
		$title      = trans('database.' . $repository->getTable());

		return view('meta.show', compact('title', 'type', 'attributes', 'item'));
	}

	public function create($type) {
		$repository = $this->factory->build($type);
		$attributes = $repository->getAttributes();
		$title      = trans('database.' . $repository->getTable());

		return view('meta.create', compact('title', 'type', 'attributes'));
	}

	public function store(SaveGenderRequest $request, $type) {
		$repository = $this->factory->build($type);
		$title      = trans('database.' . $repository->getTable());

		if ($repository->store($request->all())) {
			return redirect()->route('metadata.list', $type)->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}

	public function edit($type, $id) {
		$repository = $this->factory->build($type);
		$item       = $repository->get($id);
		$attributes = $repository->getAttributes();
		$title      = trans('database.' . $repository->getTable());

		return view('meta.edit', compact('title', 'type', 'attributes', 'item'));
	}

	public function update(SaveGenderRequest $request, $type, $id) {
		$repository = $this->factory->build($type);
		$title      = trans('database.' . $repository->getTable());

		if ($repository->update($id, $request->all())) {
			return redirect()->route('metadata.list', $type)->withSuccess('更新' . $title . '成功！');
		} else {
			return back()->withInput()->withError('更新' . $title . '失败');
		}
	}

	public function delete($type, $id) {
		$repository = $this->factory->build($type);
		$title      = trans('database.' . $repository->getTable());

		if ($repository->delete($id)) {
			return redirect()->route('metadata.list', $type)->withSuccess('删除' . $title . '成功！');
		} else {
			return back()->withInput()->withError('删除' . $title . '失败');
		}
	}
}

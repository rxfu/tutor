<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveRoleRequest;
use Tis\Account\Repositories\RoleRepository;

class RoleController extends Controller {

	protected $roles;

	public function __construct(RoleRepository $roles) {
		$this->roles = $roles;
	}

	public function getList() {
		$items = $this->roles->getAll();
		$title = '角色';

		return view('role.list', compact('title', 'items'));
	}

	public function show($id) {
		$item  = $this->roles->get($id);
		$title = '角色';

		return view('role.show', compact('title', 'item'));
	}

	public function create() {
		$title = '角色';

		return view('role.create', compact('title'));
	}

	public function store(SaveRoleRequest $request) {
		$title = '角色';

		if ($this->roles->store($request->all())) {
			return redirect()->route('role.list')->withSuccess('添加' . $title . '成功！');
		} else {
			return back()->withInput()->withError('添加' . $title . '失败');
		}
	}

	public function edit($id) {
		$item  = $this->roles->get($id);
		$title = '角色';

		return view('role.edit', compact('title', 'item'));
	}

	public function update(SaveRoleRequest $request, $id) {
		$title = '角色';

		if ($this->roles->update($id, $request->all())) {
			return redirect()->route('role.list')->withSuccess('更新' . $title . '成功！');
		} else {
			return back()->withInput()->withError('更新' . $title . '失败');
		}
	}

	public function delete($id) {
		$title = '角色';

		if ($this->roles->delete($id)) {
			return redirect()->route('role.list')->withSuccess('删除' . $title . '成功！');
		} else {
			return back()->withInput()->withError('删除' . $title . '失败');
		}
	}
}

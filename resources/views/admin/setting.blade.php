@extends('layouts.admin')
@section('title')
    Setting Page
@endsection
@section('content')
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Setting</h4>
                <form action="{{route('admin.setting.bobot')}} " method="POST" data-no-reset="true">
                @if (isset($c1))
                @php
                    $c11 = json_decode($c1);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Price (C1)</label>
                              <select name="w_c1" id="" class="form-control">
                                  <option value="1" @if ($c11->weight == 1)
                                      {{ "selected" }} @endif >Very Low </option>
                                  <option value="2" @if ($c11->weight == 2)
                                    {{ "selected" }} @endif>Low </option>
                                  <option value="3" @if ($c11->weight == 3)
                                    {{ "selected" }} @endif>Medium </option>
                                  <option value="4" @if ($c11->weight == 4)
                                    {{ "selected" }} @endif>High </option>
                                  <option value="5" @if ($c11->weight == 5)
                                    {{ "selected" }} @endif>Very High </option>
                              </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c1" id="" class="form-control">
                              <option value="0" @if (!$c11->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c11->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c2))
                @php
                    $c22 = json_decode($c2);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Memori Internal (C2)  </label>
                              <select name="w_c2" id="" class="form-control">
                                <option value="1" @if ($c22->weight == 1)
                                    {{ "selected" }} @endif >Very Low </option>
                                <option value="2" @if ($c22->weight == 2)
                                  {{ "selected" }} @endif>Low </option>
                                <option value="3" @if ($c22->weight == 3)
                                  {{ "selected" }} @endif>Medium </option>
                                <option value="4" @if ($c22->weight == 4)
                                  {{ "selected" }} @endif>High </option>
                                <option value="5" @if ($c22->weight == 5)
                                  {{ "selected" }} @endif>Very High </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c2" id="" class="form-control">
                              <option value="0" @if (!$c22->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c22->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c3))
                @php
                    $c33 = json_decode($c3);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Kamera (C3) </label>
                              <select name="w_c3" id="" class="form-control">
                                <option value="1" @if ($c33->weight == 1)
                                    {{ "selected" }} @endif >Very Low </option>
                                <option value="2" @if ($c33->weight == 2)
                                  {{ "selected" }} @endif>Low </option>
                                <option value="3" @if ($c33->weight == 3)
                                  {{ "selected" }} @endif>Medium </option>
                                <option value="4" @if ($c33->weight == 4)
                                  {{ "selected" }} @endif>High </option>
                                <option value="5" @if ($c33->weight == 5)
                                  {{ "selected" }} @endif>Very High </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c3" id="" class="form-control">
                              <option value="0" @if (!$c33->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c33->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c4))
                @php
                    $c44 = json_decode($c4);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Processor (C4) </label>
                              <select name="w_c4" id="" class="form-control">
                                <option value="1" @if ($c44->weight == 1)
                                    {{ "selected" }} @endif >Very Low </option>
                                <option value="2" @if ($c44->weight == 2)
                                  {{ "selected" }} @endif>Low </option>
                                <option value="3" @if ($c44->weight == 3)
                                  {{ "selected" }} @endif>Medium </option>
                                <option value="4" @if ($c44->weight == 4)
                                  {{ "selected" }} @endif>High </option>
                                <option value="5" @if ($c44->weight == 5)
                                  {{ "selected" }} @endif>Very High </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c4" id="" class="form-control">
                              <option value="0" @if (!$c44->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c44->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c5))
                @php
                    $c55 = json_decode($c5);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">RAM (C5) </label>
                              <select name="w_c5" id="" class="form-control">
                                <option value="1" @if ($c55->weight == 1)
                                    {{ "selected" }} @endif >Very Low </option>
                                <option value="2" @if ($c55->weight == 2)
                                  {{ "selected" }} @endif>Low </option>
                                <option value="3" @if ($c55->weight == 3)
                                  {{ "selected" }} @endif>Medium </option>
                                <option value="4" @if ($c55->weight == 4)
                                  {{ "selected" }} @endif>High </option>
                                <option value="5" @if ($c55->weight == 5)
                                  {{ "selected" }} @endif>Very High </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c5" id="" class="form-control">
                              <option value="0" @if (!$c55->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c55->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($c6))
                @php
                    $c66 = json_decode($c6);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Sistem Operasi (C6)  </label>
                              <select name="w_c6" id="" class="form-control">
                                <option value="1" @if ($c66->weight == 1)
                                    {{ "selected" }} @endif >Very Low </option>
                                <option value="2" @if ($c66->weight == 2)
                                  {{ "selected" }} @endif>Low </option>
                                <option value="3" @if ($c66->weight == 3)
                                  {{ "selected" }} @endif>Medium </option>
                                <option value="4" @if ($c66->weight == 4)
                                  {{ "selected" }} @endif>High </option>
                                <option value="5" @if ($c66->weight == 5)
                                  {{ "selected" }} @endif>Very High </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c6" id="" class="form-control">
                              <option value="0" @if (!$c66->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c66->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Save</button>
                 </form>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
@push('scripts')
    @include("admin.script.form-modal-ajax")
@endpush

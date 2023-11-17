<div>
    <div class="collapse collapse-plus my-2 bg-base-200">
        <input type="radio" name="my-accordion-3" checked  />
        <div class="bg-blue-200 collapse-title text-xl font-medium">
            S1
        </div>
        <div class="collapse-content">
            <div class=" ">
                <table class="table ">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($S1 as $rs)
                        <tr class="bg-base-200">
                            {{-- <th>1</th> --}}
                            <td>{{ $rs->topic->title }}</td>
                            <td>{{ $rs->subject->name }}</td>
                             @if ($rs->isDone==1)
                            <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" checked='checked' wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                              @else
                              <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                            @endif
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="collapse collapse-plus my-2 bg-base-200">
        <input type="radio" name="my-accordion-3" />
        <div class="bg-blue-200 collapse-title text-xl font-medium">
            S3
        </div>
        <div class="collapse-content">
            <div class=" ">
                <table class="table ">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($S3 as $rs)
                        <tr class="bg-base-200">
                            {{-- <th>1</th> --}}
                            <td>{{ $rs->topic->title }}</td>
                            <td>{{ $rs->subject->name }}</td>
                             @if ($rs->isDone==1)
                            <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" checked='checked' wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                              @else
                              <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="collapse collapse-plus my-2 bg-base-200">
        <input type="radio" name="my-accordion-3" />
        <div class="bg-blue-200 collapse-title text-xl font-medium">
            S7
        </div>
        <div class="collapse-content">
            <div class=" ">
                <table class="table ">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($S7 as $rs)
                        <tr class="bg-base-200" wire:key='{{ $rs->id }}'>
                            {{-- <th>1</th> --}}
                            <td>{{ $rs->topic->title }}</td>
                            <td>{{ $rs->subject->name }}</td>
                            @if ($rs->isDone==1)
                            <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" checked='checked' wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                              @else
                              <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                            @endif
                            {{-- <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="collapse collapse-plus my-2 bg-base-200">
        <input type="radio" name="my-accordion-3"    />
        <div class="bg-blue-200 collapse-title text-xl font-medium">
            S15
        </div>
        <div class="collapse-content">
            <div class=" ">
                <table class="table ">
                    <!-- head -->
                    <thead>
                        <tr>
                            {{-- <th></th> --}}
                            <th>Topic</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($S15 as $rs)
                        <tr class="bg-base-200">
                            {{-- <th>1</th> --}}
                            <td>{{ $rs->topic->title }}</td>
                            <td>{{ $rs->subject->name }}</td>
                             @if ($rs->isDone==1)
                            <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" checked='checked' wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                              @else
                              <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="collapse collapse-plus my-2 bg-base-200">
        <input type="radio" name="my-accordion-3"    />
        <div class="bg-blue-200 collapse-title text-xl font-medium">
            S30
        </div>
        <div class="collapse-content">
            <div class=" ">
                <table class="table ">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($S30 as $rs)
                        <tr class="bg-base-200">
                            <td>{{ $rs->topic->title }}</td>
                            <td>{{ $rs->subject->name }}</td>
                             @if ($rs->isDone==1)
                            <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" checked='checked' wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                              @else
                              <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="collapse collapse-plus my-2 bg-base-200">
        <input type="radio" name="my-accordion-3"    />
        <div class="bg-blue-100 collapse-title text-xl font-medium">
            S70
        </div>
        <div class="collapse-content">
            {{-- <p>hello</p> --}}
            <div class=" ">
                <table class="table ">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($S70 as $rs)
                        <tr class="bg-base-200">
                            <td>{{ $rs->topic->title }}</td>
                            <td>{{ $rs->subject->name }}</td>
                             @if ($rs->isDone==1)
                            <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" checked='checked' wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                              @else
                              <td><div class="form-control">
                                <label class="cursor-pointer label">
                                  <input type="checkbox" wire:change='isDone({{ $rs->id }})' class="checkbox checkbox-primary " />
                                </label>
                              </div></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

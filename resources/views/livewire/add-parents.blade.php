<div>
    @if ($show_table == false)
        <button class="btn btn-warning btn-sm btn-lg pull-right" wire:click="returnBackToTable" type="button">{{ trans('parent_trans.returnBackToTable') }}</button><br><br>
    @endif

    {{-- ----------------------------- Message Alert ------------------------------- ! --}}
    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $successMessage }}
        </div>
    @endif
    {{-- ----------------------------------------------------------------------------- --}}

    {{-- ------------------------- Message Error If Catch -------------------------- ! --}}
    @if (isset($catchError))
        <div class="alert alert-danger" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $catchError }}
        </div>
    @endif
    {{-- ----------------------------------------------------------------------------- --}}

    @if ($show_table)
        @include('livewire.Parent_table')
    
    @else
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button"
                   class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}">1</a>
                <p>{{ trans('parent_trans.father_info') }}</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button"
                   class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}">2</a>
                <p>{{ trans('parent_trans.mother_info') }}</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button"
                   class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                   disabled="disabled">3</a>
                <p>{{ trans('parent_trans.confirm_info') }}</p>

                {{-- ------------------------------------------------------------------------------- --}}
                
                <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                    @if ($currentStep != 3)
                   <div style="display: none" class="row setup-content" id="step-3">
                       @endif
                       <div class="col-xs-12">
                           <div class="col-md-12"><br>
                               <label style="color: red">{{trans('parent_trans.Attachments')}}</label>
                               <div class="form-group">
                                   <input type="file" wire:model="photos" accept="image/*" multiple>
                               </div>
                               <br>
   
                               <input type="hidden" wire:model="Parent_id">
   
                               <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button"
                                       wire:click="back(2)">{{ trans('parent_trans.previous') }}</button>
                             
                               @if($updateMode)
                                   <button class="btn btn-success btn-sm nextBtn btn-lg pull-left" wire:click="submitForm_edit"
                                           type="button">{{trans('parent_trans.edit')}}
                                   </button>
                               @else
                                   <button class="btn btn-success btn-sm btn-lg pull-left" wire:click="submitForm"
                                           type="button">{{ trans('parent_trans.Finish') }}</button>
                               @endif
   
                           </div>
                       </div>
                   </div>
   
           </div>

                {{-- ---------------------------------------------------------------------- --}}

            </div>
        </div>
    </div>

    @include('livewire.fatherForm')
    @include('livewire.motherForm')


    @endif


</div>

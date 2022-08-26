<div id="app" x-data="doqusign()" x-init="init()">
    <div class="wizard-wrapper flex">
      <template x-for="(step, index) in wizardSteps.steps" :key="step.name">
        <div
          class="wizard-step"
          x-text="step.name"
          :class="{'active' : wizardSteps.startIndex >= index}"
        ></div>
      </template>
    </div>

    <!-- reactive  -->
    <div class="step-wrapper ">
      <template
        x-for="(formTemplate, index) in formsTemplate"
        :key="formTemplate.name"
      >
        <div x-show="index === wizardSteps.startIndex">
          <h2 x-text="formTemplate.name"></h2>
          <template x-for="field in formTemplate.fields" :key="field.name">
            <div>
              <label x-text="field.label" :for="field.name"></label>
              <input
                :type="field.type"
                x-model="field.value"
              />
            </div>
          </template>
        </div>
      </template>
    </div>
    <!-- hardcoded -->
    <div class="step-wrapper hidden">
      <!-- Step 1 form -->
      <div
        x-ref="step1"
        class="step-1 form-step"
        x-show="showForm($refs.step1)"
      >
        <h2>Form 1</h2>
        <div>
          <label for="field1">field1</label>
          <input type="text" name="field1" id="" />
        </div>

        <div>
          <label for="field2">field2</label>
          <input type="text" name="field2" id="" />
        </div>

        <div>
          <label for="field3">field3</label>
          <input type="text" name="field3" id="" />
        </div>
      </div>

      <!-- Step 2 form -->
      <div
        x-ref="step2"
        class="step-2 form-step"
        x-show="showForm($refs.step2)"
      >
        <h2>Form 2</h2>
        <div>
          <label for="next1">other1</label>
          <input type="text" name="next1" id="" />
        </div>

        <div>
          <label for="next2">next2</label>
          <input type="text" name="next2" id="" />
        </div>

        <div>
          <label for="next3">next3</label>
          <input type="text" name="next3" id="" />
        </div>
      </div>

      <!-- Step 3 form -->
      <div
        x-ref="step3"
        class="step-3 form-step"
        x-show="showForm($refs.step3)"
      >
        <h2>Form 3</h2>
        <div>
          <label for="other1">other1</label>
          <input type="text" name="other1" id="" />
        </div>

        <div>
          <label for="other2">other2</label>
          <input type="text" name="other2" id="" />
        </div>

        <div>
          <label for="other3">other3</label>
          <input type="text" name="other3" id="" />
        </div>
      </div>

      <!-- Step 4 final form, display json data from prev forms -->
      <div
        x-ref="step4"
        class="step-4 form-step"
        x-show="showForm($refs.step4)"
      >
        <h2>Form 4</h2>
        <!-- <p x-text="JSON.stringify(data)"></p> -->
      </div>
    </div>

    <div class="wizard-footer">
      <button @click="nextStep">Next</button>
      <button @click="prevStep">Prev</button>
    </div>
    <h5>Form data:</h5>
    {{-- <pre x-text="JSON.stringify(formsTemplate, undefined, 4)"></div> --}}

  </div>
  <script>
    function doqusign() {
      return {
        wizardSteps: {
          startIndex: 0,
          steps: [
            {
              name: "Step 1"
            },
            {
              name: "Step 2"
            },
            {
              name: "Step 3"
            },
            {
              name: "Step 4"
            }
          ]
        },
        formsTemplate: [
          {
            name: "Form 1",
            fields: [
              {
                label: "Field 1",
                type: "checkbox",
                name: "field1",

              },
              { label: "Field 2", type: "text", name: "field2" },
              { label: "Field 3", type: "text", name: "field3", value: "123" }
            ]
          },
          {
            name: "Form 2",
            fields: [
              { label: "Next 1", type: "text", name: "next1" },
              { label: "Next 2", type: "text", name: "next2" },
              {
                label: "Next 3",
                type: "checkbox",
                name: "next3",

              }
            ]
          },
          {
            name: "Form 3",
            fields: [
              { label: "Other 1", type: "text", name: "other1" },
              { label: "Other 2", type: "text", name: "other2" },
              { label: "Other 3", type: "text", name: "other3" }
            ]
          },
          {
            name: "Form 4",
            fields: []
          }
        ],
        init() {
          console.log("init");
        },
        showForm(ref) {
          // const formElements = document.querySelectorAll(".form-step");
          const index = [...ref.parentElement.children].indexOf(ref);

          return index === this.wizardSteps.startIndex;
        },
        nextStep() {
          if (
            this.wizardSteps.startIndex <
            this.wizardSteps.steps.length - 1
          ) {
            this.wizardSteps.startIndex++;
          }
        },
        prevStep() {
          if (this.wizardSteps.startIndex > 0) {
            this.wizardSteps.startIndex--;
          }
        }
      };
    }
  </script>

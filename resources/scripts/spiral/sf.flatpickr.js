(function(){
  var SfTinymce = function (sf, node, options) {
    this._construct(sf, node, options)
  }

  SfTinymce.prototype = Object.create(sf.core.BaseDOMConstructor.prototype)

  SfTinymce.prototype.name = "flatpickr"

  SfTinymce.prototype._construct = function (sf, node, options) {
      this.init(sf, node, options)
      new Flatpickr(node, this.options.config || {})
  }

  SfTinymce.prototype.optionsToGrab  = {
      config: {
          value: {},
          domAttr: "data-config",
          processor: function (node, val, self) {
              if (!val) return this.value
              if (typeof val == "string") {
                  try {
                      val = JSON.parse(val)
                  } catch (e) {
                      console.error("Config JSON.parse error: ", e)
                  }
              }
              return Object.assign(self.value, val)
          }
      }
  }

  SfTinymce.prototype.die = function () {
      delete this
  }

  sf.instancesController.registerInstanceType(SfTinymce, "js-sf-flatpickr")
})()
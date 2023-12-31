{% load public_tags %}

<div class="{{ class|default:'col-lg-3' }}">
    <label class="control-label col-2">{{ label }}</label>
    <select multiple name="{{ name }}" id="{{ name }}" class="form-control select rounded">
        <option value="">{{ placeholder|default:'همه موارد'}}</option>
        {% for item in items %}
            <option value="{{ item.id }}"
                    {% if item.id|stringformat:'s' == request.GET|get_request_GET_value:name %}selected{% endif %}>
                {{ item.name }}
            </option>
        {% endfor %}
    </select>
</div>